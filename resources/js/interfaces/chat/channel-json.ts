// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

export const supportedChannelTypes = ['ANNOUNCE', 'PUBLIC', 'TEAM', 'GROUP', 'PM'] as const;
export type SupportedChannelType = (typeof supportedChannelTypes)[number];
export const supportedTypeLookup = new Set(supportedChannelTypes) as Set<ChannelType>;

export type ChannelType = SupportedChannelType | 'PRIVATE' | 'MULTIPLAYER' | 'SPECTATOR' | 'TEMPORARY';

export function filterSupportedChannelTypes(json: ChannelJson[]) {
  return json.filter((channel) => supportedTypeLookup.has(channel.type)) as (ChannelJson & { type: SupportedChannelType })[];
}

export default interface ChannelJson {
  channel_id: number;
  current_user_attributes?: {
    can_list_users: boolean;
    can_message: boolean;
    can_message_error: string | null;
    last_read_id: number | null;
  };
  description?: string;
  icon?: string;
  last_message_id?: number;
  message_length_limit: number;
  name: string;
  type: ChannelType;
  users?: number[];
  uuid?: string | null;
}
